import { Select, Row, Text, HTMLText, Checkbox, Repeater } from "@boxraiser/visual-editor"

export const buildAccordion = prefix => [
    Select(`${prefix ? `${prefix}-` : ''}mode`, {
        label: 'Accordion mode',
        help: 'Select the mode of accordion',
        default: 'simple',
        options: [
            {
                value: 'simple',
                label: 'Simple'
            },
            {
                value: 'multiple',
                label: 'Multiple'
            }
        ]
    }),
    Repeater(`${prefix ? `${prefix}-` : ''}items`, {
        title: 'Accordion Items',
        addLabel: 'Add item',
        fields: [
            Row([
                Text('title', { label: 'Title', default: 'Item title' }),
                Checkbox('opened', {
                    label: 'Opened',
                    help: 'This item should be opened by default',
                    default: false
                })
            ]),
            HTMLText('content', { label: 'Content' })
        ]
    })
];