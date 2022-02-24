import { Checkbox, Repeater, Row, Select, Tabs, Text } from "@boxraiser/visual-editor";

export const name = 'button-with-loader';

export const component = {
    title: 'Button With Loader',
    category: 'Content',
    fields: [
        Tabs(
            {
                label: 'Spinner',
                fields: [
                    Row([
                        Checkbox('spinner-show', {
                            label: 'Show label',
                            default: true
                        }),
                        Text('spinner-label', {
                            label: 'Label',
                            multiline: false
                        })
                    ])
                ]
            },
            {
                label: 'AJAX',
                fields: [
                    Row([
                        Text('ajax-url', {
                            label: 'API url',
                            multiline: false
                        }),
                        Select('ajax-method', {
                            label: 'HTTP method',
                            default: 'get',
                            options: [
                                {
                                    label: 'GET',
                                    value: 'get'
                                },
                                {
                                    label: 'POST',
                                    value: 'post'
                                }
                            ]
                        })
                    ]),
                    Repeater('ajax-headers', {
                        label: 'AJAX Headers',
                        addLabel: 'Add Header',
                        fields: [
                            Row([
                                Text('key', {
                                    label: 'Key',
                                    multiline: false
                                }),
                                Text('value', {
                                    label: 'Value',
                                    multiline: false
                                })
                            ])
                        ]
                    }),
                    Repeater('ajax-body', {
                        label: 'AJAX Body',
                        addLabel: 'Add Body Value',
                        fields: [
                            Row([
                                Text('key', {
                                    label: 'Key',
                                    multiline: false
                                }),
                                Text('value', {
                                    label: 'Value',
                                    multiline: false
                                })
                            ])
                        ]
                    }),
                    Row([
                        Text('ajax-status-key', {
                            label: 'AJAX Status Key',
                            multiline: false
                        }),
                        Text('ajax-status-ok-value', {
                            label: 'AJAX OK Status Value',
                            multiline: false
                        })
                    ])
                ]
            },
            {
                label: 'Button',
                fields: [
                    Text('button-label', {
                        label: 'Label',
                        multiline: false
                    }),
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
                                },
                                {
                                    label: 'Success',
                                    value: 'success'
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
                                    label: 'Info',
                                    value: 'info'
                                },
                                {
                                    label: 'Link',
                                    value: 'link'
                                }
                            ]
                        }),
                        Select('button-size', {
                            label: 'Size',
                            default: '',
                            options: [
                                {
                                    label: 'Small',
                                    value: 'btn-sm'
                                },
                                {
                                    label: 'Medium',
                                    value: ''
                                },
                                {
                                    label: 'Large',
                                    value: 'btn-lg'
                                }
                            ]
                        }),
                        Checkbox('button-outline', {
                            label: 'Show Outline',
                            default: true
                        })
                    ])
                ]
            }
        ),
        Checkbox('show-final-button', {
            label: 'Show final button (Only on preview)',
            default: false
        })
    ]
};