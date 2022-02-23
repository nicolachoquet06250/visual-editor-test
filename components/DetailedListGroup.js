import { Checkbox, Color, HTMLText, Repeater, Row, Tabs, Text } from "@boxraiser/visual-editor";

export const name = 'detailed-list-group';

export const component = {
    title: 'Detailed List Group',
    category: 'List',
    fields: [
        Row([
            Checkbox('flush', {
                label: 'Is flush',
                default: false
            }),
            Checkbox('numbered', {
                label: 'Numbered',
                default: false
            })
        ]),
        Repeater('items', {
            label: 'Items',
            addLabel: 'Add item',
            fields: [
                Color('item-color', {
                    label: 'Background color',
                    default: 'white',
                    colors: [
                        'white',
                        'black',
                        '#FF7900',
                        '#50BE87',
                        '#CD3C14',
                        '#FFD200',
                        '#4BB4E6',
                        '#CCCCCC'
                    ]
                }),
                Tabs(
                    {
                        label: 'Text',
                        fields: [
                            Row([
                                Text('item-title', {
                                    label: 'Title',
                                    multiline: false
                                }),
                                HTMLText('item-text', {
                                    label: 'Content',
                                    multiline: true
                                })
                            ]),
                            Row([
                                Checkbox('item-active', {
                                    label: 'Active',
                                    default: false
                                }),
                                Checkbox('item-disabled', {
                                    label: 'Disabled',
                                    default: false
                                })
                            ])
                        ]
                    },
                    {
                        label: 'Badge',
                        fields: [
                            HTMLText('item-tag-content', {
                                label: 'Badge content (empty if not)',
                                default: ''
                            }),
                            Color('item-tag-color', {
                                label: 'Badge color',
                                default: '#FF7900',
                                colors: [
                                    '#FF7900',
                                    '#000000',
                                    '#32C832',
                                    '#FFCC00',
                                    '#CD3C14',
                                    '#527ED8',
                                    '#CCCCCC'
                                ]
                            })
                        ]
                    }
                )
            ]
        })
    ]
};