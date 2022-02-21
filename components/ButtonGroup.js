import { Repeater, Text, Row, Select, Checkbox, Tabs } from "@boxraiser/visual-editor";

export const name = 'button-group';

export const component = {
    title: 'Button Group',
    category: 'Content',
    fields: [
        Text('label', {
            label: 'Labeled by',
            multiline: false
        }),
        Tabs(
            {
                label: 'Buttons',
                fields: [
                    Checkbox('enable-button-type', {
                        label: 'Enable',
                        default: true
                    }),
                    Repeater('buttons', {
                        label: 'Buttons',
                        addLabel: 'Add button',
                        fields: [
                            Row([
                                Text('label', {
                                    label: 'Label',
                                    multiline: false
                                }),
                                Select('type', {
                                    label: 'Type',
                                    default: 'button',
                                    options: [
                                        {
                                            label: 'Button',
                                            value: 'button'
                                        }
                                    ]
                                })
                            ]),
                            Row([
                                Select('theme', {
                                    label: 'Theme',
                                    default: 'primary',
                                    options: [
                                        {
                                            label: 'Primary',
                                            value: 'primary'
                                        },
                                        {
                                            label: 'Secondary',
                                            value: 'secondary'
                                        },
                                        {
                                            label: 'Error',
                                            value: 'danger'
                                        },
                                        {
                                            label: 'Warning',
                                            value: 'warning'
                                        },
                                        {
                                            label: 'Success',
                                            value: 'success'
                                        }
                                    ]
                                }),
                                Checkbox('active', {
                                    label: 'Active',
                                    default: false
                                })
                            ])
                        ]
                    })
                ]
            },
            {
                label: 'Checkboxes',
                fields: [
                    Checkbox('enable-checkbox-type', {
                        label: 'Enable',
                        default: false
                    }),
                    Repeater('checkboxes', {
                        label: 'Checkboxes',
                        addLabel: 'Add Checkbox',
                        fields: [
                            Row([
                                Text('label', {
                                    label: 'Label',
                                    multiline: false
                                }),
                                Checkbox('default', {
                                    label: 'Checked',
                                    default: false
                                })
                            ]),
                            Row([
                                Text('name', {
                                    label: 'Name',
                                    multiline: false
                                }),
                                Select('theme', {
                                    label: 'Theme',
                                    default: 'primary',
                                    options: [
                                        {
                                            label: 'Primary',
                                            value: 'primary'
                                        },
                                        {
                                            label: 'Secondary',
                                            value: 'secondary'
                                        },
                                        {
                                            label: 'Error',
                                            value: 'danger'
                                        },
                                        {
                                            label: 'Warning',
                                            value: 'warning'
                                        },
                                        {
                                            label: 'Success',
                                            value: 'success'
                                        }
                                    ]
                                }),
                            ])
                        ]
                    })
                ]
            },
            {
                label: 'Radios buttons',
                fields: [
                    Checkbox('enable-radio-type', {
                        label: 'Enable',
                        default: false
                    }),
                    Repeater('radios', {
                        label: 'Radios buttons',
                        addLabel: 'Add Radio button',
                        fields: [
                            Row([
                                Text('label', {
                                    label: 'Label',
                                    multiline: false
                                }),
                                Checkbox('default', {
                                    label: 'Checked',
                                    default: false
                                })
                            ]),
                            Row([
                                Text('name', {
                                    label: 'Name',
                                    multiline: false
                                }),
                                Select('theme', {
                                    label: 'Theme',
                                    default: 'primary',
                                    options: [
                                        {
                                            label: 'Primary',
                                            value: 'primary'
                                        },
                                        {
                                            label: 'Secondary',
                                            value: 'secondary'
                                        },
                                        {
                                            label: 'Error',
                                            value: 'danger'
                                        },
                                        {
                                            label: 'Warning',
                                            value: 'warning'
                                        },
                                        {
                                            label: 'Success',
                                            value: 'success'
                                        }
                                    ]
                                }),
                            ])
                        ]
                    })
                ]
            }
        )
    ]
};