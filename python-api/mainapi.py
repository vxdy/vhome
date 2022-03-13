import json

import flask as fs
from flask import Flask
import time
from modules import *

app = Flask(__name__)
strAuthToken = "201UYgpHITQ25oXsd9vEEMhezpDLizhu"


@app.route('/api/nanoleaf', methods=['GET'])
def nanoleaf():
    if request.args.get('state'):
        return state()
    if request.args.get('color'):
        return setcolor()


@app.route('/api/door', methods=['GET'])
def door():
    if request.args.get("status") != "":
        intState = request.args.get("status")
        strDeviceName = request.args.get("devicename")
        print(str(request.args.get("status")))
        print(str(strDeviceName))
        with open('conf/device.json', 'r') as file:
            data = json.load(file)
            if intState == "1":
                data[strDeviceName]["state"] = "Geschlossen"
            elif intState == "0":
                data[strDeviceName]["state"] = "Offen"
            data[strDeviceName]["update"] = int(time.time())

            with open('conf/device.json', 'w') as jsonfile:
                json.dump(data, jsonfile)

        return json.dumps("OK")
    return "Timeout"


@app.route('/api/device', methods=['GET'])
def device():
    with open("conf/device.json", "r") as jsonfile:
        data = json.load(jsonfile)
        resp = fs.Response(json.dumps(data))
        resp.headers['Access-Control-Allow-Origin'] = '*'
        return resp


@app.route('/api/powerplug', methods=['GET'])
def powerplug():
    # http://192.168.178.73:8888/api/powerplug?toggle=1&devicename=Tasmota1
    if request.args.get("toggle") != "" and request.args.get("devicename") != "":
        with open("conf/device.json", "r") as jsonfile:
            data = json.load(jsonfile)
            strState = toggleplug(data[request.args.get("devicename")]["ip"])
            data[request.args.get("devicename")]["state"] = json.loads(strState)["POWER"]
            with open("conf/device.json", "w") as file:
                print(strState)
                json.dump(data, file)
        resp = fs.Response(strState)
        resp.headers['Access-Control-Allow-Origin'] = '*'
        return resp


if __name__ == '__main__':
    try:
        app.run(port=8888, debug=True, threaded=True, host="0.0.0.0")
    except Exception as strException:
        print("Error: " + str(strException))
