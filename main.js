import { VisualEditor } from '@boxraiser/visual-editor';
import { 
  card_row_name, CardRow, 
  simple_card_name, SimpleCard,
  accordion_name, Accordion,
  tariff_cartridge_name, TariffCartridge
} from './components';
import { spinner_tag, Spinner } from './ce';

let editor = new VisualEditor();

editor.registerComponent(simple_card_name, SimpleCard);
editor.registerComponent(card_row_name, CardRow);
editor.registerComponent(accordion_name, Accordion);
editor.registerComponent(tariff_cartridge_name, TariffCartridge);

editor.defineElement();

customElements.define(spinner_tag, Spinner);