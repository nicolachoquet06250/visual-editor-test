import { Row, Text, HTMLText, Repeater } from "@boxraiser/visual-editor";

export const buildCard = prefix => [
    Row([
        Text(`${prefix ? `${prefix}-` : ''}title`, { label: 'Title', default: 'Title' }),
        HTMLText(`${prefix ? `${prefix}-` : ''}content`, { label: 'Content' })
    ]),
    Repeater(`${prefix ? `${prefix}-` : ''}card-buttons`, {
        title: 'Card Buttons',
        addLabel: 'Add Card Button',
        fields: [
            Row([
                Text('label', { label: 'Label', default: 'Link href' }),
                Text('url', { label: 'Link', default: '#' })
            ])
        ]
    })
];