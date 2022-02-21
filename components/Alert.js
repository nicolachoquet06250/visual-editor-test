import { Row, Select, Text } from "@boxraiser/visual-editor";

export const name = 'alert';

export const component = {
    title: 'Alert',
    category: 'Content',
    fields: [
        Row([
            Select('type', {
                label: 'Type',
                default: 'success',
                options: [
                    {
                        label: 'Success',
                        value: 'success'
                    },
                    {
                        label: 'Info',
                        value: 'info'
                    },
                    {
                        label: 'Warning',
                        value: 'warning'
                    },
                    {
                        label: 'Error',
                        value: 'danger'
                    }
                ]
            }),
            Text('content', {
                label: 'Content',
                multiline: false
            })
        ])
    ]
};