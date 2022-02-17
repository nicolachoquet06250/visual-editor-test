import { HTMLText, Repeater, Text, Select, Row, Checkbox } from "@boxraiser/visual-editor";

export const name = 'accordion';

export const component = {
    title: 'Accordion',
    category: 'List',
    fields: [
        Select('accordion-mode', {
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
        Repeater('accordion-items', {
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
    ]
};