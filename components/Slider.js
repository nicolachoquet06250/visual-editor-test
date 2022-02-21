import { Checkbox, ImageUrl, Number, Repeater, Row, Tabs, Text } from "@boxraiser/visual-editor";

export const name = 'slider';

export const component = {
    title: 'Slider',
    category: 'Content',
    fields: [
        Tabs(
            {
                label: 'Settings',
                fields: [
                    Row([
                        Checkbox('auto', {
                            label: 'Is auto',
                            default: false
                        }),
                        Checkbox('show-indicators', {
                            label: 'Show indicators',
                            default: false
                        })
                    ]),
                    Row([
                        Checkbox('fade-animations', {
                            label: 'Fade animations',
                            default: false
                        }),
                        Checkbox('prevent-cycling', {
                            label: 'Prevent cycling',
                            default: false
                        })
                    ])
                ]
            },
            {
                label: 'Slides',
                fields: [
                    Repeater('slides', {
                        label: 'Slides',
                        addLabel: 'Add Slide',
                        fields: [
                            Tabs(
                                {
                                    label: 'Settings',
                                    fields: [
                                        Checkbox('active', {
                                            label: 'Active',
                                            default: false
                                        }),
                                        Number('interval', {
                                            label: 'Interval',
                                            default: 1000
                                        })
                                    ]
                                },
                                {
                                    label: 'Image',
                                    fields: [
                                        Row([
                                            ImageUrl('image', {
                                                label: 'Image'
                                            }),
                                            Text('alternative-text', {
                                                label: 'Alternative text',
                                                multiline: false
                                            })
                                        ])
                                    ]
                                }
                            )
                        ]
                    })
                ]
            }
        )
    ]
};