import requests

class HTTPrequestController(object):
   
    def getStudents(self):
        httprequest=requests.get("https://localhost/getStudents.php/", verify=False)
        
        for item in httprequest.json():
            print((item['id'],item['name'], item['surname'],item['age'],item['course']))



