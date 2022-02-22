import { buildImage } from '../ve-components/Image';

export const name = 'image-banner';

export const component = {
    title: 'Image Banner',
    category: 'Banner',
    fields: [
        ...buildImage('', {
            image_help: 'Choose the banner image'
        })
    ]
};