import { HTMLText, Repeater, Text, Row } from '@boxraiser/visual-editor';

export const name = 'simple-card';

export const component = {
    title: 'Simple Card',
    category: 'Banner',
    fields: [
        Text('title', {multiline: false}),
        HTMLText('content', {}),
        Repeater('buttons', {
            title: 'Boutons',
            addLabel: 'Add a new button',
            fields: [
                Row([
                Text('label', { label: 'Label', default: 'Link href' }),
                Text('url', { label: 'Link', default: '#' })
                ])
            ]
        })
    ]
};