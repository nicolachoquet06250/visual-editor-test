import {Row, Select, Text} from "@boxraiser/visual-editor";

export const name = 'simple-title';

const options = Array.from(Array(7).keys()).map(i => ({
    label: `H${i + 1}`,
    value: `h${i + 1}`
}));

export const component = {
    title: 'Simple title',
    category: 'Header',
    fields: [
        Row([
            Text('title-label', {
                label: 'Tile',
                multiline: false
            }),
            Select('title-level', {
                label: 'Title Level',
                default: 'h1',
                options
            })
        ])
    ]
};