from flask import Flask, request, render_template,jsonify,redirect,url_for
from jinja2 import Environment

app = Flask(__name__)
Jinja2 = Environment()
@app.route('/',methods=['GET', 'POST'])
def home_page():

    return render_template('order.html',is_value=False)
@app.route('/checkout',methods=['GET', 'POST'])
def result():
    if request.method == 'POST':

        quantity = request.form.get('quantity')
        meal_type = request.form.get('mealType')
        ingredients = request.form.get('removeItems')
        output = Jinja2.from_string('Order ' + meal_type).render()
        return render_template('checkout.html',output=output,is_value=True )
    return redirect(url_for("home_page"))
if __name__ == '__main__':
    app.run('0.0.0.0',port=5000)