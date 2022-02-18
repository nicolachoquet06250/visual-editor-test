import { VisualEditor } from '@boxraiser/visual-editor';
import { 
  card_row_name, CardRow, 
  simple_card_name, SimpleCard,
  accordion_name, Accordion,
  tariff_cartridge_name, TariffCartridge,
  search_navbar_name, SearchNavbar,
  toggle_dark_mode_name, ToggleDarkMode
} from './components';
import { spinner_tag, Spinner } from './ce';
import env from './env.json';

let editor = new VisualEditor();

editor.registerComponent(simple_card_name, SimpleCard);
editor.registerComponent(card_row_name, CardRow);
editor.registerComponent(accordion_name, Accordion);
editor.registerComponent(tariff_cartridge_name, TariffCartridge);
editor.registerComponent(search_navbar_name, SearchNavbar);
editor.registerComponent(toggle_dark_mode_name, ToggleDarkMode);

editor.defineElement();

customElements.define(spinner_tag, Spinner);

document.querySelector('#app').innerHTML = `
<form action="${env.SERVER_URL}/save" method="post">
  <visual-editor name="content"
                 preview="${env.SERVER_URL}/preview"
                 iconsUrl="/assets/editor/[name].png"
                 value='[]'></visual-editor>
</form>

<bs-spinner></bs-spinner>
`;

window.addEventListener('load', () => {
  document.querySelector('button[aria-label=Close]')?.remove();
  
  showSpinner();
  fetch(`${env.SERVER_URL}/current`).then(r => r.text()).then(json => {
    document.querySelector('visual-editor').value = json;
    hideSpinner();
    
    document.querySelector('form').addEventListener('submit', handleSavePage);
  });
});