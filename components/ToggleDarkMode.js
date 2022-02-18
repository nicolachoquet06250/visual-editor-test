import { Checkbox } from "@boxraiser/visual-editor";

export const name = 'toggle-dark-mode';

export const component  = {
    title: 'Toggle Dark Mode',
    category: 'Theming',
    fields: [
        Checkbox('toggle-dark-mode', {
            label: 'Toggle Dark Mode',
            help: 'Test your page theming with toggle on / off dark mode',
            default: false
        })
    ]
};