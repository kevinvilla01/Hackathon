import { NearBindgen, near, call, view, Vector } from 'near-sdk-js';
import { POINT_ONE, users } from './users';

@NearBindgen({})
class GuestBook {
    users: Vector<users> = new Vector<users>("v-uid");

    @call({ payableFunction: true })
    // Public - Adds a new user.
    add_user({ name, address, balance, points, publisher }: { name: string, address: string, balance: string, points: number, publisher: boolean }) {
    const sender = near.predecessorAccountId();

    // Create a new user instance
    const user = new users({ name, address, balance, points, publisher });
    this.users.push(user);
}

    @view({})
    // Returns an array of visible users (publisher = true) along with their points.
    get_visible_users({ from_index = 0, limit = 10 }: { from_index: number, limit: number }): { user: users, points: number }[] {
        return this.users.toArray()
        .filter(user => user.publisher)
        .slice(from_index, from_index + limit)
        .map(user => ({ user, points: user.points })); // Return user and their points
    }

    @view({})
    total_users(): number { return this.users.length }

    @view({})
    total_visible_users(): number {
    return this.users.toArray().filter(user => user.publisher).length;
    }
}