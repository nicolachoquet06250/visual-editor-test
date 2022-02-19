import { Text, Row } from '@boxraiser/visual-editor';
import { component as SearchNavbar } from './SearchNavbar';

export const name = 'search-nav-bar-with-title';

export const component = {
    ...SearchNavbar,
    title: 'Search Navbar with title',
    fields: [
        Row([
            Text('label', {
                label: 'Title',
                default: 'Page title'
            }),
            Text('url', {
                label: 'Link',
                default: '#'
            })
        ]),
        ...SearchNavbar.fields
    ]
};