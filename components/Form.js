import {Checkbox, Number, Repeater, Row, Select, Tabs, Text} from "@boxraiser/visual-editor";

export const name = 'form';

export const component = {
    title: 'Form',
    category: 'Content',
    fields: [
        Row([
            Select('method', {
                label: 'HTTP Method',
                default: 'get',
                options: [
                    {
                        label: 'GET',
                        value: 'get'
                    },
                    {
                        label: 'POST',
                        value: 'post'
                    },
                    {
                        label: 'PUT',
                        value: 'put'
                    },
                    {
                        label: 'DELETE',
                        value: 'delete'
                    }
                ]
            }),
            Text('destination', {
                label: 'Action'
            })
        ]),
        Repeater('elements', {
            label: 'Elements',
            addLabel: 'Add element',
            fields: [
                Tabs(
                {
                        label: 'Textarea',
                        fields: [
                            Row([
                                Number('textarea-order', {
                                    label: 'Order',
                                    default: '1'
                                }),
                                Checkbox('enable-textarea', {
                                    label: 'Enable'
                                }),
                                Checkbox('textarea-required', {
                                    label: 'Is required'
                                })
                            ]),
                            Text('textarea-label', {
                                label: 'Label',
                                multiline: false
                            }),
                            Text('textarea-placeholder', {
                                label: 'Placeholder',
                                multiline: false
                            }),
                            Text('textarea-name', {
                                label: 'Name',
                                multiline: false
                            }),
                            Text('textarea-help', {
                                label: 'Help text',
                                multiline: false
                            })
                        ]
                    },
                    {
                        label: 'Input',
                        fields: [
                            Row([
                                Number('input-order', {
                                    label: 'Order',
                                    default: '1'
                                }),
                                Checkbox('enable-input', {
                                    label: 'Enable'
                                }),
                                Checkbox('input-required', {
                                    label: 'Is required'
                                })
                            ]),
                            Text('input-label', {
                                label: 'Label',
                                multiline: false
                            }),
                            Select('input-label-alignment', {
                                label: 'Label Alignment',
                                default: 'top',
                                options: [
                                    {
                                        label: 'Top',
                                        value: 'top'
                                    },
                                    {
                                        label: 'Left',
                                        value: 'left'
                                    }
                                ]
                            }),
                            Select('input-type', {
                                label: 'Type',
                                default: 'text',
                                options: [
                                    {
                                        label: 'Text',
                                        value: 'text'
                                    },
                                    {
                                        label: 'Number',
                                        value: 'number'
                                    },
                                    {
                                        label: 'Email',
                                        value: 'email'
                                    },
                                    {
                                        label: 'Password',
                                        value: 'password'
                                    },
                                    {
                                        label: 'Tel',
                                        value: 'tel'
                                    },
                                    {
                                        label: 'Checkbox',
                                        value: 'checkbox'
                                    }
                                ]
                            }),
                            Text('input-placeholder', {
                                label: 'Placeholder',
                                multiline: false
                            }),
                            Text('input-name', {
                                label: 'Name',
                                multiline: false
                            }),
                            Text('input-help', {
                                label: 'Help text',
                                multiline: false
                            })
                        ]
                    },
                    {
                        label: 'Button',
                        fields: [
                            Row([
                                Number('button-order', {
                                    label: 'Order',
                                    default: '1'
                                }),
                                Checkbox('enable-button', {
                                    label: 'Enable'
                                })
                            ]),
                            Row([
                                Select('button-type', {
                                    label: 'Type',
                                    default: 'submit',
                                    options: [
                                        {
                                            label: 'Submit',
                                            value: 'submit'
                                        },
                                        {
                                            label: 'Reset',
                                            value: 'reset'
                                        },
                                        {
                                            label: 'Button',
                                            value: 'button'
                                        }
                                    ]
                                }),
                                Checkbox('button-primary', {
                                    label: 'Is Primary',
                                    default: true
                                })
                            ]),
                            Text('button-label', {
                                label: 'Label',
                                multiline: false
                            })
                        ]
                    }
                )
            ]
        })
    ]
};