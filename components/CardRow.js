import { Repeater } from '@boxraiser/visual-editor';
import { buildCard } from '../ve-components/Card';

export const name = 'card-row';

export const component = {
    title: 'Card Row',
    category: 'Banner',
    fields: [
        Repeater('cards', {
            title: 'Cards',
            addLabel: 'Add Card',
            fields: buildCard()
        })
    ]
};