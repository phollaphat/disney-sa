<template>
    <div class="m-0 w-full flex flex-row flex-nowrap h-full">
        <div class="w-1/4 bg-[#9985BB]">
            <NavBar></NavBar>
        </div>
        <div class="w-3/4 bg-[#D4D8F0] overflow-y-auto">
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
