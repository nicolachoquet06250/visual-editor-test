import { ImageUrl, Text } from '@boxraiser/visual-editor';

export const name = 'image-banner';

export const component = {
    title: 'Image Banner',
    category: 'Banner',
    fields: [
        ImageUrl('image', {
            label: 'Image',
            help: 'Choose the banner image'
        }),
        Text('title', {
            label: 'Title'
        })
    ]
};