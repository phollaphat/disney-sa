<template>
    <nav class="border-solid border-r-[#53505C] border-[#9985BB] border-[3px]">
        <div class="flex flex-col p-10 gap-4">
            <Profile></Profile>

            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg"
                :class="$route.name == 'cashier' ? 'bg-[#EEBBC3]' : ''">
                <MenuLink to="/cashier"><img src="@/assets/Shop.png" alt="" /></MenuLink>
                <MenuLink to="/cashier">Cashier</MenuLink>
            </div>

            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg"
                :class="$route.name == 'products' ? 'bg-[#EEBBC3]' : ''">
                <MenuLink to="/products"><img src="@/assets/Bag_alt_fill.png" alt="" /></MenuLink>
                <MenuLink to="/products">Products</MenuLink>
            </div>

            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg"
                :class="$route.name == 'reportPayment' ? 'bg-[#EEBBC3]' : ''">
                <MenuLink to="/reportPayment"><img src="@/assets/Wallet.png" alt="" /></MenuLink>
                <MenuLink to="/reportPayment">Payment Reports</MenuLink>
            </div>

            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg"
                :class="$route.name == 'reportDairy' ? 'bg-[#EEBBC3]' : ''">
                <MenuLink to="/reportDairy"><img src="@/assets/File_dock_fill.png" alt="" /></MenuLink>
                <MenuLink to="/reportDairy">Dairy Reports</MenuLink>
            </div>

            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg"
                :class="$route.name == 'claim' ? 'bg-[#EEBBC3]' : ''">
                <MenuLink to="/claim"><img src="@/assets/File_dock_fill.png" alt="" /></MenuLink>
                <MenuLink to="/claim">Claim</MenuLink>
            </div>
            
            <div class="py-5">
                <hr class="border-black" />
            </div>
            
            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg">
                <img src="@/assets/logout.svg" alt="" />
                <MenuLink to="/">Logout</MenuLink>
            </div>
        </div>
    </nav>
</template>
