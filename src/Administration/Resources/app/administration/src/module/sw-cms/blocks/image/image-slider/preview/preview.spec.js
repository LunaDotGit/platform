/**
 * @package buyers-experience
 */
import { mount } from '@vue/test-utils';

async function createWrapper() {
    return mount(await wrapTestComponent('sw-cms-preview-image-slider', {
        sync: true,
    }), {
        global: {
            stubs: {
                'sw-icon': true,
            },
        },
    });
}

describe('src/module/sw-cms/blocks/image/image-slider/preview', () => {
    it('should be a Vue.js component', async () => {
        const wrapper = await createWrapper();
        expect(wrapper.vm).toBeTruthy();
    });
});
