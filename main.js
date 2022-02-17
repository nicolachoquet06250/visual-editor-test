import { VisualEditor, HTMLText, Repeater, Text, Row, Select } from '@boxraiser/visual-editor';
import './style.css';

let editor = new VisualEditor();

// Register a component / block
editor.registerComponent('hero', {
  title: 'Hero',
  category: 'Banner',
  fields: [
    Text('title', {multiline: false}),
    HTMLText('content', {}),
    Repeater('buttons', {
      title: 'Boutons',
      addLabel: 'Add a new button',
      fields: [
        Row([
          Text('label', { label: 'Label', default: 'Call to action' }),
          Text('url', { label: 'Link' }),
          Select('type', {
            default: 'primary',
            label: 'type',
            options: [
              { label: 'Primaire', value: 'primary' },
              { label: 'Secondaire', value: 'secondary' }
            ]
          })
        ])
      ]
    })
  ]
});

editor.defineElement();