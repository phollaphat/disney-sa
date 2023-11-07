<template>
    <div class="m-0 w-full flex flex-row flex-nowrap h-full overflow-y-auto">
        <div class="w-1/5 bg-[#9985BB] border-r-2 border-[#53505C]">
            <NavBar></NavBar>
        </div>
        <div class="w-4/5 bg-[#D4D8F0]">
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
