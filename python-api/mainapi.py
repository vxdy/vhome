from flask import request, Flask
import json
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
    strDeviceName = "door1"
    if request.args.get("status") != "":
        print(str(request.args.get("status")))
        intState = request.args.get("status")
        with open('conf/device.json', 'r') as file:
            data = json.load(file)
            if intState == "1":
                data[strDeviceName]["state"] = "Geschlossen"
            elif intState == "0":
                data[strDeviceName]["state"] = "Offen"

            with open('conf/device.json', 'w') as jsonfile:
                json.dump(data, jsonfile)

        return json.dumps("OK")
    return "Timeout"


@app.route('/api/device', methods=['GET'])
def device():
    with open("conf/device.json", "r") as jsonfile:
        data = json.load(jsonfile)
        return data


if __name__ == '__main__':
    app.run(port=8888, debug=True, threaded=True, host="0.0.0.0")
