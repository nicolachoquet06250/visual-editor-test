import { ImageUrl, Text, Row } from "@boxraiser/visual-editor";

/**
 * @param {String|undefined} prefix 
 * @param {{ image_help?: String }} options 
 * @returns {Array}
 */
export const buildImage = (prefix = '', options = {}) => [
    Row([
        ImageUrl(`${prefix ? `${prefix}-` : ''}image`, {
            label: 'Image',
            help: (options.image_help ?? '')
        }),
        Text(`${prefix ? `${prefix}-` : ''}alternative-text`, {
            label: 'Alternative text',
            multiline: false
        })
    ])
];