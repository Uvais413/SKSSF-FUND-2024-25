from flask import Flask, render_template, request, jsonify

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/submit_form', methods=['POST'])
def submit_form():
    data = request.form
    name = data.get('name')
    phone = data.get('phone')
    message = data.get('message')
    
    # Here you would typically save this data to a database
    print(f"New message from: {name}, Phone: {phone}")
    print(f"Message: {message}")
    
    return jsonify({
        'status': 'success',
        'message': 'Thank you for your message! We will contact you soon.'
    })

if __name__ == '__main__':
    app.run(debug=True)