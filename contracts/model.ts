import { NewsClassifier } from './news-classifier';

export const POINT_ONE = '100000000000000000000000';

export class PostedMessage {
    premium: boolean;
    sender: string;
    text: string;
    classifier: NewsClassifier;

constructor({ premium, sender, text }: { premium: boolean; sender: string; text: string }) {
    this.premium = premium;
    this.sender = sender;
    this.text = text;
    this.classifier = new NewsClassifier(); // Inicializa el clasificador
}

// Método para predecir la veracidad del mensaje
public isMessageTrue(): boolean {
    return this.classifier.predict(this.text);
}
}