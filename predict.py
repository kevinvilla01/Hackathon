from flask import Flask, request, jsonify
import pickle
import nltk
from nltk.corpus import stopwords
from sklearn.feature_extraction.text import CountVectorizer

app = Flask(__name__)

# Cargar el modelo y el vectorizador
with open('model.pkl', 'rb') as model_file:
    model = pickle.load(model_file)

with open('vectorizer.pkl', 'rb') as vectorizer_file:
    vectorizer = pickle.load(vectorizer_file)

# Función para preprocesar el texto
def preprocess_text(text):
    tokens = nltk.word_tokenize(text.lower())
    tokens = [word for word in tokens if word.isalnum() and word not in stopwords.words('spanish')]
    return ' '.join(tokens)

@app.route('/predict', methods=['POST'])
def predict():
    data = request.json
    texto = data['texto']

    # Preprocesar el texto
    texto_procesado = preprocess_text(texto)

    # Vectorizar el texto
    X = vectorizer.transform([texto_procesado])

    # Hacer la predicción
    prediccion = model.predict(X)

    # Convertir la predicción a texto
    resultado = "La noticia es falsa" if prediccion[0] == 0 else "La noticia es verdadera"

    return jsonify({'prediccion': resultado})

if __name__ == '__main__':
    app.run(debug=True)