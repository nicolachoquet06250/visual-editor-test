import { Color, HTMLText, Row, Text } from '@boxraiser/visual-editor';

export const name = 'tariff-cartridge';

export const component = {
    title: 'Tariff Cartridge',
    category: 'Contact',
    fields: [
        Row([
            Color('cartridge-color', {
                label: 'Cartridge color',
                help: 'Choose cartridge color',
                colors: ['#555', '#78b41e', '#a50f78'],
                default: '#555'
            }),
            Text('title', {
                multiline: false, 
                label: 'Title', 
                default: 'Cartridge title'
            })
        ]),
        Text('phone-number', { 
            multiline: false, 
            label: 'Phone Number' 
        }),
        HTMLText('describe', { 
            label: 'Describe' 
        }),
        Text('complement-infos', {
            multiline: false,
            label: 'Complement infos'
        })
    ]
};