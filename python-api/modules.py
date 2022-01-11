from flask import request
import requests
import json

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
