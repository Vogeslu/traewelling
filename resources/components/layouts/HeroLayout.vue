<template>
    <div>
        <NavbarComponent/>
        <main class="py-4">
            <div class="px-4 py-5 mt-n4"
                 style="background-image: url('/images/covers/profile-background.png');background-position: center;background-color: #c5232c">
                <div class="container">
                    <slot name="hero"></slot>
                </div>
            </div>
            <div class="container">
                <slot/>
            </div>
            <OffCanvasNavigation/>
        </main>
        <FooterComponent/>
        <MobileFooterNav/>
    </div>
</template>

<script>
import NavbarComponent from "./NavbarComponent";
import FooterComponent from "./FooterComponent";
import MobileFooterNav from "./MobileFooterNav";
import OffCanvasNavigation from "./OffCanvasNavigation";

export default {
    name: "HeroLayout",
    components: {OffCanvasNavigation, FooterComponent, NavbarComponent, MobileFooterNav}
};
</script>

<style scoped>

</style>
