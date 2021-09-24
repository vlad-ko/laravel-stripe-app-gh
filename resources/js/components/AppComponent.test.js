require('jsdom-global');

import appComponent from "../components/AppComponent.vue";
import {mount} from "@vue/test-utils";

// Test if the component is a vue Instance
test("AppComponent", ()=>{
    expect(mount(appComponent)).toBeTruthy();
})