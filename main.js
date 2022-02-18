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

let editor = new VisualEditor();

editor.registerComponent(simple_card_name, SimpleCard);
editor.registerComponent(card_row_name, CardRow);
editor.registerComponent(accordion_name, Accordion);
editor.registerComponent(tariff_cartridge_name, TariffCartridge);
editor.registerComponent(search_navbar_name, SearchNavbar);
editor.registerComponent(toggle_dark_mode_name, ToggleDarkMode);

editor.defineElement();

customElements.define(spinner_tag, Spinner);