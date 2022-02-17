import { HTMLText, Repeater, Text, Row } from '@boxraiser/visual-editor';

export const name = 'card-row';

export const component = {
    title: 'Card Row',
    category: 'Banner',
    fields: [
        Repeater('cards', {
            title: 'Cards',
            addLabel: 'Add Card',
            fields: [
                Row([
                    Text('title', { label: 'Title', default: 'Title' }),
                    HTMLText('content', { label: 'Content' })
                ]),
                Repeater('card-buttons', {
                    title: 'Card Buttons',
                    addLabel: 'Add Card Button',
                    fields: [
                        Row([
                            Text('label', { label: 'Label', default: 'Link href' }),
                            Text('url', { label: 'Link', default: '#' })
                        ])
                    ]
                })
            ]
        })
    ]
};