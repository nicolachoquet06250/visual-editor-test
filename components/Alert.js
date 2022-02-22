import { buildAlert } from "../ve-components/Alert";

export const name = 'alert';

export const component = {
    title: 'Alert',
    category: 'Content',
    fields: buildAlert()
};