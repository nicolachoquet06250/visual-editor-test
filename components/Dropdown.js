import { Checkbox, Repeater, Row, Select, Text, Tabs } from "@boxraiser/visual-editor";

export const name = 'dropdown';

export const component = {
    title: 'Dropdown',
    category: 'Content',
    fields: [
        Row([
            Checkbox('splitted', {
                label: 'Splitted',
                default: false
            }),
            Checkbox('opened', {
                label: 'Opened',
                default: true
            }),
            Checkbox('dark', {
                label: 'Dark',
                default: false
            })
        ]),
        Row([
            Select('button-type', {
                label: 'Type',
                default: 'primary',
                options: [
                    {
                        label: 'Primary',
                        value: 'primary'
                    },
                    {
                        label: 'Secondary',
                        value: 'secondary'
                    }
                ]
            }),
            Select('button-size', {
                label: 'Size',
                default: 'medium',
                options: [
                    {
                        label: 'Large',
                        value: 'large'
                    },
                    {
                        label: 'Medium',
                        value: 'medium'
                    },
                    {
                        label: 'Small',
                        value: 'small'
                    }
                ]
            })
        ]),
        Row([
            Text('button-label', {
                label: 'Label',
                multiline: false
            }),
            Select('side', {
                label: 'Side',
                default: 'dropdown',
                options: [
                    {
                        label: 'Down',
                        value: 'dropdown'
                    },
                    {
                        label: 'Up',
                        value: 'dropup'
                    },
                    {
                        label: 'Right',
                        value: 'dropend'
                    },
                    {
                        label: 'Left',
                        value: 'dropstart'
                    },
                ]
            })
        ]),
        Repeater('items', {
            label: 'Items',
            addLabel: 'Add Item',
            fields: [
                Tabs(
                    {
                        label: 'Separator',
                        fields: [
                            Checkbox('is-separator', {
                                label: 'Is separator',
                                default: false
                            })
                        ]
                    },
                    {
                        label: 'Option',
                        fields: [
                            Row([
                                Text('label', {
                                    label: 'Label',
                                    multiline: false
                                }),
                                Text('href', {
                                    label: 'Href',
                                    multiline: false
                                })
                            ])
                        ]
                    }
                )
            ]
        })
    ]
};