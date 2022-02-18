import { Color, ImageUrl, Repeater, Row, Text, Checkbox } from '@boxraiser/visual-editor';

export const name = 'search-nav-bar';

export const component = {
    title: 'Search Navbar',
    category: 'Headers',
    fields: [
        Row([
            Checkbox('opened', {
                label: 'Opened in mobile',
                help: 'Choose if the menu is opened on responsive mode in preview only',
                default: true
            }),
            Color('mode-color', {
                label: 'Cartridge color',
                help: 'Choose cartridge color',
                colors: ['black', 'white', '#CCCCCC'],
                default: 'white'
            }),
        ]),
        ImageUrl('logo', {
            label: 'Logo',
            help: 'Choose header logo',
            default: 'https://boosted.orange.com/docs/5.1/assets/img/orange-logo.svg'
        }),
        Repeater('links', {
            title: 'Links',
            addLabel: 'Add link',
            fields: [
                Row([
                    Text('label', {
                        label: 'Label',
                        default: 'Link label'
                    }),
                    Text('url', {
                        label: 'Link',
                        default: '#'
                    })
                ])
            ]
        })
    ]
};