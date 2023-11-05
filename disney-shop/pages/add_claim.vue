<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen py-8">
            <div class="mx-auto px-4">
                <h1 class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md"> Add Claim</h1>
                
                <div class=" place-content-center gap-5 p-10 bg-[#FFFFFECC] w-[1120px] h-[650px] rounded-[20px]" >
                            <h3 class="pl-[300px]"> Waranty No.</h3>
                            <center>
                            <input type="text"
                                    class="mb-10 w-2/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                    placeholder="Waranty No.">
                            </center>

                            <h3 class="pl-[300px]"> Model</h3>
                            <center>
                            <input type="text"
                                    class="mb-10 w-2/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                    placeholder=" Model">
                            </center>

                            <h3 class="pl-[300px]"> Customer Tel.</h3>
                            <center>
                            <input type="text"
                                    class="mb-10 w-2/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                    placeholder="Customer tel."> 

                                    <MenuLink to="/claim" 
                                class="bg-[#5D12D2] hover:bg-[#9400FF] text-white w-1/4 py-4 px-4 rounded-lg mt-4 w-full text-center ml-8">
                                Submit
                            </MenuLink>
                            
                            </center> 
                </div>
            </div>
        </div>
        <a href="claim">
                <button
                    class="bg-[#4D4C7D] w-[100px] h-[45px] ml-4 rounded-[15px] text-xl hover:bg-[#363062] text-white">Back</button>
            </a>
    </div>
</template>