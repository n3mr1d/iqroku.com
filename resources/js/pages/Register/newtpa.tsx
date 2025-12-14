import { storeTpa } from '@/actions/App/Http/Controllers/Register';
import { Form } from '@inertiajs/react';

export default () => (
    <Form action={storeTpa()}>
        <input type="text" name="name" />
        <input type="email" name="email" />
        <button type="submit">Create User</button>
    </Form>
);
