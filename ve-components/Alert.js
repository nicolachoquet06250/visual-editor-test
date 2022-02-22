import { Row, Select, Text } from "@boxraiser/visual-editor";

export const buildAlert = prefix => [
    Row([
        Select(`${prefix ? `${prefix}-` : ''}type`, {
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
        Text(`${prefix ? `${prefix}-` : ''}content`, {
            label: 'Content',
            multiline: false
        })
    ])
];