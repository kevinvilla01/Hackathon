export const POINT_ONE = '1000000000000000000';

export class users {
    publisher: boolean;
    name: string;
    address: string;
    balance: string;
    points: number;
    constructor({name, address, balance, points, publisher } : users) {
        this.name = name;
        this.address = address;
        this.balance = balance;
        this.points = points;
        this.publisher = publisher;
    }
}