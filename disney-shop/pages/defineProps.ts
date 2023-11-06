/* __placeholder__ */
const { defineProps, defineSlots, defineEmits, defineExpose, defineModel, defineOptions, withDefaults, } = await import('vue');
const __VLS_componentsOption = {};
let __VLS_name!: 'edit_profile';
function __VLS_template() {
let __VLS_ctx!: InstanceType<__VLS_PickNotAny<typeof __VLS_internalComponent, new () => {}>> & {};
/* Components */
let __VLS_otherComponents!: NonNullable<typeof __VLS_internalComponent extends { components: infer C; } ? C : {}> & typeof __VLS_componentsOption;
let __VLS_own!: __VLS_SelfComponent<typeof __VLS_name, typeof __VLS_internalComponent & (new () => { $slots: typeof __VLS_slots; })>;
let __VLS_localComponents!: typeof __VLS_otherComponents & Omit<typeof __VLS_own, keyof typeof __VLS_otherComponents>;
let __VLS_components!: typeof __VLS_localComponents & __VLS_GlobalComponents & typeof __VLS_ctx;
/* Style Scoped */
type __VLS_StyleScopedClasses = {};
let __VLS_styleScopedClasses!: __VLS_StyleScopedClasses | keyof __VLS_StyleScopedClasses | (keyof __VLS_StyleScopedClasses)[];
/* CSS variable injection */
/* CSS variable injection end */
let __VLS_resolvedLocalAndGlobalComponents!: {};
({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div; ({} as __VLS_IntrinsicElements).div;
({} as __VLS_IntrinsicElements).h1; ({} as __VLS_IntrinsicElements).h1;
({} as __VLS_IntrinsicElements).form; ({} as __VLS_IntrinsicElements).form;
({} as __VLS_IntrinsicElements).table; ({} as __VLS_IntrinsicElements).table;
({} as __VLS_IntrinsicElements).tr; ({} as __VLS_IntrinsicElements).tr; ({} as __VLS_IntrinsicElements).tr; ({} as __VLS_IntrinsicElements).tr;
({} as __VLS_IntrinsicElements).img;
({} as __VLS_IntrinsicElements).input; ({} as __VLS_IntrinsicElements).input; ({} as __VLS_IntrinsicElements).input; ({} as __VLS_IntrinsicElements).input; ({} as __VLS_IntrinsicElements).input; ({} as __VLS_IntrinsicElements).input; ({} as __VLS_IntrinsicElements).input;
({} as __VLS_IntrinsicElements).h3; ({} as __VLS_IntrinsicElements).h3; ({} as __VLS_IntrinsicElements).h3; ({} as __VLS_IntrinsicElements).h3; ({} as __VLS_IntrinsicElements).h3; ({} as __VLS_IntrinsicElements).h3; ({} as __VLS_IntrinsicElements).h3; ({} as __VLS_IntrinsicElements).h3; ({} as __VLS_IntrinsicElements).h3; ({} as __VLS_IntrinsicElements).h3;
({} as __VLS_IntrinsicElements).a; ({} as __VLS_IntrinsicElements).a; ({} as __VLS_IntrinsicElements).a; ({} as __VLS_IntrinsicElements).a;
({} as __VLS_IntrinsicElements).button; ({} as __VLS_IntrinsicElements).button; ({} as __VLS_IntrinsicElements).button; ({} as __VLS_IntrinsicElements).button;
{
const __VLS_0 = ({} as __VLS_IntrinsicElements)["div"];
const __VLS_1 = __VLS_elementAsFunctionalComponent(__VLS_0);
({} as __VLS_IntrinsicElements).div;
({} as __VLS_IntrinsicElements).div;
const __VLS_2 = __VLS_1({ ...{}, class: ("flex flex-col justify-start"), }, ...__VLS_functionalComponentArgsRest(__VLS_1));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_0, typeof __VLS_2> & Record<string, unknown>) => void)({ ...{}, class: ("flex flex-col justify-start"), });
const __VLS_3 = __VLS_pickFunctionalComponentCtx(__VLS_0, __VLS_2)!;
let __VLS_4!: __VLS_NormalizeEmits<typeof __VLS_3.emit>;
{
const __VLS_5 = ({} as __VLS_IntrinsicElements)["div"];
const __VLS_6 = __VLS_elementAsFunctionalComponent(__VLS_5);
({} as __VLS_IntrinsicElements).div;
({} as __VLS_IntrinsicElements).div;
const __VLS_7 = __VLS_6({ ...{}, class: ("h-screen py-8"), }, ...__VLS_functionalComponentArgsRest(__VLS_6));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_5, typeof __VLS_7> & Record<string, unknown>) => void)({ ...{}, class: ("h-screen py-8"), });
const __VLS_8 = __VLS_pickFunctionalComponentCtx(__VLS_5, __VLS_7)!;
let __VLS_9!: __VLS_NormalizeEmits<typeof __VLS_8.emit>;
{
const __VLS_10 = ({} as __VLS_IntrinsicElements)["div"];
const __VLS_11 = __VLS_elementAsFunctionalComponent(__VLS_10);
({} as __VLS_IntrinsicElements).div;
({} as __VLS_IntrinsicElements).div;
const __VLS_12 = __VLS_11({ ...{}, class: ("mx-auto px-4"), }, ...__VLS_functionalComponentArgsRest(__VLS_11));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_10, typeof __VLS_12> & Record<string, unknown>) => void)({ ...{}, class: ("mx-auto px-4"), });
const __VLS_13 = __VLS_pickFunctionalComponentCtx(__VLS_10, __VLS_12)!;
let __VLS_14!: __VLS_NormalizeEmits<typeof __VLS_13.emit>;
{
const __VLS_15 = ({} as __VLS_IntrinsicElements)["h1"];
const __VLS_16 = __VLS_elementAsFunctionalComponent(__VLS_15);
({} as __VLS_IntrinsicElements).h1;
({} as __VLS_IntrinsicElements).h1;
const __VLS_17 = __VLS_16({ ...{}, class: ("text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md"), }, ...__VLS_functionalComponentArgsRest(__VLS_16));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_15, typeof __VLS_17> & Record<string, unknown>) => void)({ ...{}, class: ("text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md"), });
const __VLS_18 = __VLS_pickFunctionalComponentCtx(__VLS_15, __VLS_17)!;
let __VLS_19!: __VLS_NormalizeEmits<typeof __VLS_18.emit>;
(__VLS_18.slots!).default;
}
{
const __VLS_20 = ({} as __VLS_IntrinsicElements)["div"];
const __VLS_21 = __VLS_elementAsFunctionalComponent(__VLS_20);
({} as __VLS_IntrinsicElements).div;
({} as __VLS_IntrinsicElements).div;
const __VLS_22 = __VLS_21({ ...{}, class: (" place-content-center gap-5 p-10 bg-[#FFFFFECC] w-[1120px] h-[650px] rounded-[20px]"), }, ...__VLS_functionalComponentArgsRest(__VLS_21));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_20, typeof __VLS_22> & Record<string, unknown>) => void)({ ...{}, class: (" place-content-center gap-5 p-10 bg-[#FFFFFECC] w-[1120px] h-[650px] rounded-[20px]"), });
const __VLS_23 = __VLS_pickFunctionalComponentCtx(__VLS_20, __VLS_22)!;
let __VLS_24!: __VLS_NormalizeEmits<typeof __VLS_23.emit>;
{
const __VLS_25 = ({} as __VLS_IntrinsicElements)["form"];
const __VLS_26 = __VLS_elementAsFunctionalComponent(__VLS_25);
({} as __VLS_IntrinsicElements).form;
({} as __VLS_IntrinsicElements).form;
const __VLS_27 = __VLS_26({ ...{}, class: ("imgForm "), action: ("leanform.php"), method: ("post"), enctype: ("multipart/form-data"), }, ...__VLS_functionalComponentArgsRest(__VLS_26));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_25, typeof __VLS_27> & Record<string, unknown>) => void)({ ...{}, class: ("imgForm "), action: ("leanform.php"), method: ("post"), enctype: ("multipart/form-data"), });
const __VLS_28 = __VLS_pickFunctionalComponentCtx(__VLS_25, __VLS_27)!;
let __VLS_29!: __VLS_NormalizeEmits<typeof __VLS_28.emit>;
{
const __VLS_30 = ({} as __VLS_IntrinsicElements)["table"];
const __VLS_31 = __VLS_elementAsFunctionalComponent(__VLS_30);
({} as __VLS_IntrinsicElements).table;
({} as __VLS_IntrinsicElements).table;
const __VLS_32 = __VLS_31({ ...{}, class: ("w-full flex rows gap-[80px]"), }, ...__VLS_functionalComponentArgsRest(__VLS_31));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_30, typeof __VLS_32> & Record<string, unknown>) => void)({ ...{}, class: ("w-full flex rows gap-[80px]"), });
const __VLS_33 = __VLS_pickFunctionalComponentCtx(__VLS_30, __VLS_32)!;
let __VLS_34!: __VLS_NormalizeEmits<typeof __VLS_33.emit>;
{
const __VLS_35 = ({} as __VLS_IntrinsicElements)["tr"];
const __VLS_36 = __VLS_elementAsFunctionalComponent(__VLS_35);
({} as __VLS_IntrinsicElements).tr;
({} as __VLS_IntrinsicElements).tr;
const __VLS_37 = __VLS_36({ ...{}, }, ...__VLS_functionalComponentArgsRest(__VLS_36));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_35, typeof __VLS_37> & Record<string, unknown>) => void)({ ...{}, });
const __VLS_38 = __VLS_pickFunctionalComponentCtx(__VLS_35, __VLS_37)!;
let __VLS_39!: __VLS_NormalizeEmits<typeof __VLS_38.emit>;
{
const __VLS_40 = ({} as __VLS_IntrinsicElements)["div"];
const __VLS_41 = __VLS_elementAsFunctionalComponent(__VLS_40);
({} as __VLS_IntrinsicElements).div;
({} as __VLS_IntrinsicElements).div;
const __VLS_42 = __VLS_41({ ...{}, }, ...__VLS_functionalComponentArgsRest(__VLS_41));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_40, typeof __VLS_42> & Record<string, unknown>) => void)({ ...{}, });
const __VLS_43 = __VLS_pickFunctionalComponentCtx(__VLS_40, __VLS_42)!;
let __VLS_44!: __VLS_NormalizeEmits<typeof __VLS_43.emit>;
{
const __VLS_45 = ({} as __VLS_IntrinsicElements)["img"];
const __VLS_46 = __VLS_elementAsFunctionalComponent(__VLS_45);
({} as __VLS_IntrinsicElements).img;
const __VLS_47 = __VLS_46({ ...{}, src: ("@/assets/b180691f36bd713b8c69519b8637fb8b.png"), alt: (""), class: ("h-[500px] w-[500px] object-center drop-shadow-lg"), }, ...__VLS_functionalComponentArgsRest(__VLS_46));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_45, typeof __VLS_47> & Record<string, unknown>) => void)({ ...{}, src: ("@/assets/b180691f36bd713b8c69519b8637fb8b.png"), alt: (""), class: ("h-[500px] w-[500px] object-center drop-shadow-lg"), });
const __VLS_48 = __VLS_pickFunctionalComponentCtx(__VLS_45, __VLS_47)!;
let __VLS_49!: __VLS_NormalizeEmits<typeof __VLS_48.emit>;
}
(__VLS_43.slots!).default;
}
{
const __VLS_50 = ({} as __VLS_IntrinsicElements)["div"];
const __VLS_51 = __VLS_elementAsFunctionalComponent(__VLS_50);
({} as __VLS_IntrinsicElements).div;
({} as __VLS_IntrinsicElements).div;
const __VLS_52 = __VLS_51({ ...{}, class: ("mt-6 ml-20"), }, ...__VLS_functionalComponentArgsRest(__VLS_51));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_50, typeof __VLS_52> & Record<string, unknown>) => void)({ ...{}, class: ("mt-6 ml-20"), });
const __VLS_53 = __VLS_pickFunctionalComponentCtx(__VLS_50, __VLS_52)!;
let __VLS_54!: __VLS_NormalizeEmits<typeof __VLS_53.emit>;
{
const __VLS_55 = ({} as __VLS_IntrinsicElements)["input"];
const __VLS_56 = __VLS_elementAsFunctionalComponent(__VLS_55);
({} as __VLS_IntrinsicElements).input;
const __VLS_57 = __VLS_56({ ...{}, type: ("file"), name: ("upload"), }, ...__VLS_functionalComponentArgsRest(__VLS_56));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_55, typeof __VLS_57> & Record<string, unknown>) => void)({ ...{}, type: ("file"), name: ("upload"), });
const __VLS_58 = __VLS_pickFunctionalComponentCtx(__VLS_55, __VLS_57)!;
let __VLS_59!: __VLS_NormalizeEmits<typeof __VLS_58.emit>;
}
{
const __VLS_60 = ({} as __VLS_IntrinsicElements)["input"];
const __VLS_61 = __VLS_elementAsFunctionalComponent(__VLS_60);
({} as __VLS_IntrinsicElements).input;
const __VLS_62 = __VLS_61({ ...{}, type: ("submit"), name: ("save"), value: ("upload"), }, ...__VLS_functionalComponentArgsRest(__VLS_61));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_60, typeof __VLS_62> & Record<string, unknown>) => void)({ ...{}, type: ("submit"), name: ("save"), value: ("upload"), });
const __VLS_63 = __VLS_pickFunctionalComponentCtx(__VLS_60, __VLS_62)!;
let __VLS_64!: __VLS_NormalizeEmits<typeof __VLS_63.emit>;
}
(__VLS_53.slots!).default;
}
(__VLS_38.slots!).default;
}
{
const __VLS_65 = ({} as __VLS_IntrinsicElements)["tr"];
const __VLS_66 = __VLS_elementAsFunctionalComponent(__VLS_65);
({} as __VLS_IntrinsicElements).tr;
({} as __VLS_IntrinsicElements).tr;
const __VLS_67 = __VLS_66({ ...{}, }, ...__VLS_functionalComponentArgsRest(__VLS_66));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_65, typeof __VLS_67> & Record<string, unknown>) => void)({ ...{}, });
const __VLS_68 = __VLS_pickFunctionalComponentCtx(__VLS_65, __VLS_67)!;
let __VLS_69!: __VLS_NormalizeEmits<typeof __VLS_68.emit>;
{
const __VLS_70 = ({} as __VLS_IntrinsicElements)["h3"];
const __VLS_71 = __VLS_elementAsFunctionalComponent(__VLS_70);
({} as __VLS_IntrinsicElements).h3;
({} as __VLS_IntrinsicElements).h3;
const __VLS_72 = __VLS_71({ ...{}, class: (""), }, ...__VLS_functionalComponentArgsRest(__VLS_71));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_70, typeof __VLS_72> & Record<string, unknown>) => void)({ ...{}, class: (""), });
const __VLS_73 = __VLS_pickFunctionalComponentCtx(__VLS_70, __VLS_72)!;
let __VLS_74!: __VLS_NormalizeEmits<typeof __VLS_73.emit>;
(__VLS_73.slots!).default;
}
{
const __VLS_75 = ({} as __VLS_IntrinsicElements)["input"];
const __VLS_76 = __VLS_elementAsFunctionalComponent(__VLS_75);
({} as __VLS_IntrinsicElements).input;
const __VLS_77 = __VLS_76({ ...{}, type: ("text"), class: ("mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"), placeholder: ("Name...."), }, ...__VLS_functionalComponentArgsRest(__VLS_76));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_75, typeof __VLS_77> & Record<string, unknown>) => void)({ ...{}, type: ("text"), class: ("mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"), placeholder: ("Name...."), });
const __VLS_78 = __VLS_pickFunctionalComponentCtx(__VLS_75, __VLS_77)!;
let __VLS_79!: __VLS_NormalizeEmits<typeof __VLS_78.emit>;
}
{
const __VLS_80 = ({} as __VLS_IntrinsicElements)["h3"];
const __VLS_81 = __VLS_elementAsFunctionalComponent(__VLS_80);
({} as __VLS_IntrinsicElements).h3;
({} as __VLS_IntrinsicElements).h3;
const __VLS_82 = __VLS_81({ ...{}, class: (""), }, ...__VLS_functionalComponentArgsRest(__VLS_81));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_80, typeof __VLS_82> & Record<string, unknown>) => void)({ ...{}, class: (""), });
const __VLS_83 = __VLS_pickFunctionalComponentCtx(__VLS_80, __VLS_82)!;
let __VLS_84!: __VLS_NormalizeEmits<typeof __VLS_83.emit>;
(__VLS_83.slots!).default;
}
{
const __VLS_85 = ({} as __VLS_IntrinsicElements)["input"];
const __VLS_86 = __VLS_elementAsFunctionalComponent(__VLS_85);
({} as __VLS_IntrinsicElements).input;
const __VLS_87 = __VLS_86({ ...{}, type: ("text"), class: ("mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"), placeholder: ("Email...."), }, ...__VLS_functionalComponentArgsRest(__VLS_86));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_85, typeof __VLS_87> & Record<string, unknown>) => void)({ ...{}, type: ("text"), class: ("mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"), placeholder: ("Email...."), });
const __VLS_88 = __VLS_pickFunctionalComponentCtx(__VLS_85, __VLS_87)!;
let __VLS_89!: __VLS_NormalizeEmits<typeof __VLS_88.emit>;
}
{
const __VLS_90 = ({} as __VLS_IntrinsicElements)["h3"];
const __VLS_91 = __VLS_elementAsFunctionalComponent(__VLS_90);
({} as __VLS_IntrinsicElements).h3;
({} as __VLS_IntrinsicElements).h3;
const __VLS_92 = __VLS_91({ ...{}, class: (""), }, ...__VLS_functionalComponentArgsRest(__VLS_91));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_90, typeof __VLS_92> & Record<string, unknown>) => void)({ ...{}, class: (""), });
const __VLS_93 = __VLS_pickFunctionalComponentCtx(__VLS_90, __VLS_92)!;
let __VLS_94!: __VLS_NormalizeEmits<typeof __VLS_93.emit>;
(__VLS_93.slots!).default;
}
{
const __VLS_95 = ({} as __VLS_IntrinsicElements)["input"];
const __VLS_96 = __VLS_elementAsFunctionalComponent(__VLS_95);
({} as __VLS_IntrinsicElements).input;
const __VLS_97 = __VLS_96({ ...{}, type: ("text"), class: ("mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"), placeholder: ("Phone Number.."), }, ...__VLS_functionalComponentArgsRest(__VLS_96));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_95, typeof __VLS_97> & Record<string, unknown>) => void)({ ...{}, type: ("text"), class: ("mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"), placeholder: ("Phone Number.."), });
const __VLS_98 = __VLS_pickFunctionalComponentCtx(__VLS_95, __VLS_97)!;
let __VLS_99!: __VLS_NormalizeEmits<typeof __VLS_98.emit>;
}
{
const __VLS_100 = ({} as __VLS_IntrinsicElements)["h3"];
const __VLS_101 = __VLS_elementAsFunctionalComponent(__VLS_100);
({} as __VLS_IntrinsicElements).h3;
({} as __VLS_IntrinsicElements).h3;
const __VLS_102 = __VLS_101({ ...{}, class: (""), }, ...__VLS_functionalComponentArgsRest(__VLS_101));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_100, typeof __VLS_102> & Record<string, unknown>) => void)({ ...{}, class: (""), });
const __VLS_103 = __VLS_pickFunctionalComponentCtx(__VLS_100, __VLS_102)!;
let __VLS_104!: __VLS_NormalizeEmits<typeof __VLS_103.emit>;
(__VLS_103.slots!).default;
}
{
const __VLS_105 = ({} as __VLS_IntrinsicElements)["input"];
const __VLS_106 = __VLS_elementAsFunctionalComponent(__VLS_105);
({} as __VLS_IntrinsicElements).input;
const __VLS_107 = __VLS_106({ ...{}, type: ("text"), class: ("mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"), placeholder: ("old Password.."), }, ...__VLS_functionalComponentArgsRest(__VLS_106));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_105, typeof __VLS_107> & Record<string, unknown>) => void)({ ...{}, type: ("text"), class: ("mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"), placeholder: ("old Password.."), });
const __VLS_108 = __VLS_pickFunctionalComponentCtx(__VLS_105, __VLS_107)!;
let __VLS_109!: __VLS_NormalizeEmits<typeof __VLS_108.emit>;
}
{
const __VLS_110 = ({} as __VLS_IntrinsicElements)["h3"];
const __VLS_111 = __VLS_elementAsFunctionalComponent(__VLS_110);
({} as __VLS_IntrinsicElements).h3;
({} as __VLS_IntrinsicElements).h3;
const __VLS_112 = __VLS_111({ ...{}, class: (""), }, ...__VLS_functionalComponentArgsRest(__VLS_111));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_110, typeof __VLS_112> & Record<string, unknown>) => void)({ ...{}, class: (""), });
const __VLS_113 = __VLS_pickFunctionalComponentCtx(__VLS_110, __VLS_112)!;
let __VLS_114!: __VLS_NormalizeEmits<typeof __VLS_113.emit>;
(__VLS_113.slots!).default;
}
{
const __VLS_115 = ({} as __VLS_IntrinsicElements)["input"];
const __VLS_116 = __VLS_elementAsFunctionalComponent(__VLS_115);
({} as __VLS_IntrinsicElements).input;
const __VLS_117 = __VLS_116({ ...{}, type: ("text"), class: ("mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"), placeholder: ("New password"), }, ...__VLS_functionalComponentArgsRest(__VLS_116));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_115, typeof __VLS_117> & Record<string, unknown>) => void)({ ...{}, type: ("text"), class: ("mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"), placeholder: ("New password"), });
const __VLS_118 = __VLS_pickFunctionalComponentCtx(__VLS_115, __VLS_117)!;
let __VLS_119!: __VLS_NormalizeEmits<typeof __VLS_118.emit>;
}
{
const __VLS_120 = ({} as __VLS_IntrinsicElements)["div"];
const __VLS_121 = __VLS_elementAsFunctionalComponent(__VLS_120);
({} as __VLS_IntrinsicElements).div;
({} as __VLS_IntrinsicElements).div;
const __VLS_122 = __VLS_121({ ...{}, class: ("mt-10"), }, ...__VLS_functionalComponentArgsRest(__VLS_121));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_120, typeof __VLS_122> & Record<string, unknown>) => void)({ ...{}, class: ("mt-10"), });
const __VLS_123 = __VLS_pickFunctionalComponentCtx(__VLS_120, __VLS_122)!;
let __VLS_124!: __VLS_NormalizeEmits<typeof __VLS_123.emit>;
{
const __VLS_125 = ({} as __VLS_IntrinsicElements)["a"];
const __VLS_126 = __VLS_elementAsFunctionalComponent(__VLS_125);
({} as __VLS_IntrinsicElements).a;
({} as __VLS_IntrinsicElements).a;
const __VLS_127 = __VLS_126({ ...{}, href: ("/profile"), }, ...__VLS_functionalComponentArgsRest(__VLS_126));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_125, typeof __VLS_127> & Record<string, unknown>) => void)({ ...{}, href: ("/profile"), });
const __VLS_128 = __VLS_pickFunctionalComponentCtx(__VLS_125, __VLS_127)!;
let __VLS_129!: __VLS_NormalizeEmits<typeof __VLS_128.emit>;
{
const __VLS_130 = ({} as __VLS_IntrinsicElements)["button"];
const __VLS_131 = __VLS_elementAsFunctionalComponent(__VLS_130);
({} as __VLS_IntrinsicElements).button;
({} as __VLS_IntrinsicElements).button;
const __VLS_132 = __VLS_131({ ...{}, class: (" bg-[#5D12D2] hover:bg-[#9400FF] text-white w-1/4 py-4 px-4 rounded-lg mt-4 w-full text-center ml-8"), }, ...__VLS_functionalComponentArgsRest(__VLS_131));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_130, typeof __VLS_132> & Record<string, unknown>) => void)({ ...{}, class: (" bg-[#5D12D2] hover:bg-[#9400FF] text-white w-1/4 py-4 px-4 rounded-lg mt-4 w-full text-center ml-8"), });
const __VLS_133 = __VLS_pickFunctionalComponentCtx(__VLS_130, __VLS_132)!;
let __VLS_134!: __VLS_NormalizeEmits<typeof __VLS_133.emit>;
(__VLS_133.slots!).default;
}
(__VLS_128.slots!).default;
}
(__VLS_123.slots!).default;
}
(__VLS_68.slots!).default;
}
(__VLS_33.slots!).default;
}
(__VLS_28.slots!).default;
}
(__VLS_23.slots!).default;
}
(__VLS_13.slots!).default;
}
(__VLS_8.slots!).default;
}
{
const __VLS_135 = ({} as __VLS_IntrinsicElements)["a"];
const __VLS_136 = __VLS_elementAsFunctionalComponent(__VLS_135);
({} as __VLS_IntrinsicElements).a;
({} as __VLS_IntrinsicElements).a;
const __VLS_137 = __VLS_136({ ...{}, href: ("/profile"), }, ...__VLS_functionalComponentArgsRest(__VLS_136));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_135, typeof __VLS_137> & Record<string, unknown>) => void)({ ...{}, href: ("/profile"), });
const __VLS_138 = __VLS_pickFunctionalComponentCtx(__VLS_135, __VLS_137)!;
let __VLS_139!: __VLS_NormalizeEmits<typeof __VLS_138.emit>;
{
const __VLS_140 = ({} as __VLS_IntrinsicElements)["button"];
const __VLS_141 = __VLS_elementAsFunctionalComponent(__VLS_140);
({} as __VLS_IntrinsicElements).button;
({} as __VLS_IntrinsicElements).button;
const __VLS_142 = __VLS_141({ ...{}, class: ("bg-[#4D4C7D] w-[100px] h-[45px] ml-4 rounded-[15px] text-xl hover:bg-[#363062] text-white"), }, ...__VLS_functionalComponentArgsRest(__VLS_141));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_140, typeof __VLS_142> & Record<string, unknown>) => void)({ ...{}, class: ("bg-[#4D4C7D] w-[100px] h-[45px] ml-4 rounded-[15px] text-xl hover:bg-[#363062] text-white"), });
const __VLS_143 = __VLS_pickFunctionalComponentCtx(__VLS_140, __VLS_142)!;
let __VLS_144!: __VLS_NormalizeEmits<typeof __VLS_143.emit>;
(__VLS_143.slots!).default;
}
(__VLS_138.slots!).default;
}
(__VLS_3.slots!).default;
}
if (typeof __VLS_styleScopedClasses === 'object' && !Array.isArray(__VLS_styleScopedClasses)) {
}
var __VLS_slots!: {};
return __VLS_slots;
}
const __VLS_internalComponent = (await import('vue')).defineComponent({
setup() {
return {};
},
});
export default (await import('vue')).defineComponent({
setup() {
return {};
},
});
