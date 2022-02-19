import {HTMLText} from "@boxraiser/visual-editor";

export const name = 'simple-paragraph';

export const component = {
    title: 'Simple Paragraph',
    category: 'Content',
    fields: [
        HTMLText('paragraph', {
            label: 'Paragraph',
            multiline: true
        })
    ]
};