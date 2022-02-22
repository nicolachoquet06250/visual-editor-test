import { Checkbox, Color, HTMLText, Repeater, Row, Select, Tabs, Text } from "@boxraiser/visual-editor";

export const name = 'list-group';

export const component = {
    title: 'List group',
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
                            Text('item-text', {
                                label: 'Label',
                                multiline: false
                            }),
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
                        label: 'Link',
                        fields: [
                            Row([
                                Text('item-link-href', {
                                    label: 'Href'
                                }),
                                Text('item-link-target', {
                                    label: 'Target',
                                    multiline: false,
                                    default: '_blank'
                                })
                            ])
                        ]
                    },
                    {
                        label: 'Button',
                        fields: [
                            Row([
                                Select('item-button-type', {
                                    label: 'Type',
                                    default: '',
                                    options: [
                                        {
                                            label: 'Disable',
                                            value: ''
                                        },
                                        {
                                            label: 'Button',
                                            value: 'button'
                                        },
                                        {
                                            label: 'Submit',
                                            value: 'submit'
                                        },
                                        {
                                            label: 'Reset',
                                            value: 'reset'
                                        }
                                    ]
                                }),
                                Text('item-button-action', {
                                    label: 'Action (JavaScript)',
                                    multiline: true
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