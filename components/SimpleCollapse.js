import { Checkbox, HTMLText, Row, Select, Tabs, Text } from "@boxraiser/visual-editor";

export const name = 'simple-collapse';

export const component = {
    title: 'Collapse',
    category: 'Content',
    fields: [
        Tabs(
            {
                label: 'Button',
                fields: [
                    Row([
                        Select('button-tag-type', {
                            label: 'Tag Type',
                            default: 'link',
                            options: [
                                {
                                    label: 'Link',
                                    value: 'link'
                                },
                                {
                                    label: 'Button',
                                    value: 'button'
                                }
                            ]
                        }),
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
                        })
                    ]),
                    Text('button-label', {
                        label: 'Label',
                        multiline: false
                    })
                ]
            },
            {
                label: 'Collapse',
                fields: [
                    Select('collapse-side', {
                        label: 'Side',
                        default: 'bottom',
                        options: [
                            {
                                label: 'Bottom',
                                value: 'bottom'
                            },
                            {
                                label: 'Top',
                                value: 'top'
                            }
                        ]
                    }),
                    HTMLText('collapse-text', {
                        label: 'Content',
                        multiline: true,
                        allowHeadings: true
                    }),
                    Row([
                        Checkbox('collapse-opened', {
                            label: 'Opened',
                            default: true
                        }),
                        Checkbox('collapse-horizontal', {
                            label: 'Is horizontal',
                            default: false
                        })
                    ])
                ]
            }
        )
    ]
};