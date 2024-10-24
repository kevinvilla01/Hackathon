import pickle
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.naive_bayes import MultinomialNB
from nltk.corpus import stopwords
import nltk

# Asegúrate de tener los stopwords descargados
nltk.download('stopwords')

# Crear un conjunto de datos ficticio
data = {
    'texto': [
        'La Tierra es plana',
        'El clima está cambiando',
        'Las vacunas son peligrosas',
        'El sol es una estrella',
        'La luna es un satélite de la Tierra',
        'Las teorías de conspiración son dañinas'
    ],
    'etiqueta': [0, 1, 0, 1, 1, 0]  # 0: falsa, 1: verdadera
}

df = pd.DataFrame(data)

# Dividir el conjunto de datos
X_train, X_test, y_train, y_test = train_test_split(df['texto'], df['etiqueta'], test_size=0.2, random_state=42)

# Vectorizar el texto
vectorizer = CountVectorizer(stop_words=stopwords.words('spanish'))
X_train_vectorized = vectorizer.fit_transform(X_train)

# Entrenar un modelo de Naive Bayes
model = MultinomialNB()
model.fit(X_train_vectorized, y_train)

# Guardar el modelo y el vectorizador
with open('model.pkl', 'wb') as model_file:
    pickle.dump(model, model_file)

with open('vectorizer.pkl', 'wb') as vectorizer_file:
    pickle.dump(vectorizer, vectorizer_file)

print("Modelo y vectorizador guardados exitosamente.")