

import os
import json
from google.protobuf.json_format import MessageToJson
from pydrive.auth import GoogleAuth
from pydrive.drive import GoogleDrive
import datetime
import time

INITIAL_FILE = "./cert/initial.json"


def uploadTheShit():

    try:
        os.chdir(os.path.dirname(os.path.abspath(__file__)))
        with open(INITIAL_FILE) as f:
            jsn = json.load(f)
            folder_id = jsn["folder_id"]

        gauth = GoogleAuth(settings_file='settings.yml')
        gauth.LocalWebserverAuth()

        drive = GoogleDrive(auth=gauth)
        folder_metadata = {
            'title': str(datetime.date.today()),
            'parents': [{"kind": "drive#fileLink", "id": folder_id}]
        }
        folder = drive.CreateFile(folder_metadata)
        folder.SetContentFile('../database.sqlite')
        folder.Upload()
        print(folder)

    except KeyboardInterrupt as error:
        uploadTheShit()


def run():
    timeNow = datetime.datetime.now().time().strftime("%H:%M:%S")
    while True:
        time.sleep(1)
        if timeNow == '00:00:00':
            uploadTheShit()
            run()
        elif  timeNow != '00:00:00':
            print ("Fuck  ! It's not the time      ============     " +timeNow+"    ================    ")
            run()
            break
            
            
            
run()
    
