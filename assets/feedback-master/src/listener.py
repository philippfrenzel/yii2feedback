from flask import Flask, request, send_from_directory
from time import sleep

app = Flask(__name__, static_url_path='/public')

@app.route('/')
def root():
    return send_from_directory('./', 'index.html')

@app.route('/feedback.js')
def script():
    return send_from_directory('./', 'feedback.js')

@app.route('/feedback.css')
def style():
    return send_from_directory('./', 'feedback.css')

@app.route('/icons.png')
def icons():
    return send_from_directory('./', 'icons.png')

@app.route('/listener', methods=['GET', 'POST'])
def listener():
    sleep(30)
    return '1'

if __name__ == '__main__':
    app.run()
