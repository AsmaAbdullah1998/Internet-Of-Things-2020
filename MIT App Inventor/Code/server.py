import RPi.GPIO as GPIO
from http.server import BaseHTTPRequestHandler, HTTPServer

GPIO.setmode(GPIO.BCM)
GPIO.setup(10, GPIO.OUT)
Request = None

class RequestHandler_httpd(BaseHTTPRequestHandler):
	def do_GET(self):
		global Request
		messagetosend = bytes('Hello world!', "utf")
		self.send_response(200)
		self.send_header('Content-Type', 'text/plain')
		self.send_header('Content-Length', len(messagetosend))
		self.end_headers()
		self.wfile.write(messagetosend)
		Request = self.requestline
		Request = Request[5 : int(len(Request)-9)]
		print(Request)
		if Request == 'on':
			GPIO.output(10, True)
		if Request == 'off':
			GPIO.output(10, False)
		return



		
server_address_httpd = ('192.168.8.130', 8080)
httpd = HTTPServer(server_address_httpd, RequestHandler_httpd)
print('Starting server: ')
httpd.serve_forever()
GPIO.cleanup()