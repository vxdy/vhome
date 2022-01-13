from flask import Flask

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
        return data


@app.route('/api/powerplug', methods=['GET'])
def powerplug():
    if request.args.get("toggle") != "" and request.args.get("devicename") != "":
        with open("conf/device.json", "r") as jsonfile:
            data = json.load(jsonfile)
            strState = toggleplug(data[request.args.get("devicename")]["ipadress"])
            data[request.args.get("devicename")]["state"] = strState
            with open("conf/device.json", "w") as file:
                json.dump(file, data)


if __name__ == '__main__':
    try:
        app.run(port=8888, debug=True, threaded=True, host="0.0.0.0")
    except Exception as strException:
        print("Error: " + str(strException))
