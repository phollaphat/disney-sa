<template>
    <div class="m-0 flex flex-row flex-nowrap h-full w-full">
        <div class="print:hidden print:m-0 print:p-0 print:overflow-hidden w-2/5 max-w-[280px] bg-[#9985BB] border-r-2 border-[#53505C]">
            <NavBar></NavBar>
        </div>
        <div class="print:overflow-hidden print:scale-[.8] w-full h-screen bg-[#D4D8F0] overflow-y-auto">
            <section>
                <slot />
            </section>
        </div>
    </div>
</template>

<style>
html {
    font-family: "Inria Serif";
}
</style>
