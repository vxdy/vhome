import json

import requests
from flask import request

strAuthToken = "201UYgpHITQ25oXsd9vEEMhezpDLizhu"
url = f'http://192.168.178.53:16021/api/v1/{strAuthToken}/state'


def state():
    data = {
        'on': {
            'value': json.loads(request.args.get('state').lower())
        }
    }
    headers = {
        'Content-Type': 'application/json'
    }
    requests.put(
        url,
        data=json.dumps(data),
        headers=headers
    )
    return json.dumps({'status': 200})


def setcolor():
    data = {"hue": {"value": 80}}

    headers = {
        'Content-Type': 'application/json'
    }
    requests.put(
        url,
        data=data,
        headers=headers
    )

    return json.dumps({'status': 200})


def toggleplug(adress):
    adress = f"http://{adress}/cm?cmnd=Power%20TOGGLE"
    strAnswer = requests.get(
        adress
    )
    print(strAnswer)
    return strAnswer.text
